<?php
class JwtHelper
{
    private static $secret = null;

    private static function getSecret()
    {
        if (self::$secret === null) {
            // Intentamos leer de $_ENV o getenv()
            // Usa el nombre exacto que tengas en tu archivo .env
            self::$secret = $_ENV['JWT_SECRET'] ?? getenv('JWT_SECRET');

            if (!self::$secret) {
                throw new Exception("Error de seguridad: La clave JWT_SECRET no está configurada en las variables de entorno.");
            }
        }
        return self::$secret;
    }

    /**
     * Codifica en Base64 optimizado para URLs (quita caracteres conflictivos)
     */
    private static function base64UrlEncode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    /**
     * Decodifica Base64 URL Safe
     */
    private static function base64UrlDecode($data)
    {
        return base64_decode(strtr($data, '-_', '+/'));
    }

    /**
     * Genera un JWT para el ID de sesión
     */
    public static function create($sessionId, $expires_at = 3600)
    {
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        $payload = json_encode([
            'sid' => $sessionId,               // ID de la sesión de la DB
            'exp' => $expires_at // Tiempo de expiración
        ]);

        $base64UrlHeader = self::base64UrlEncode($header);
        $base64UrlPayload = self::base64UrlEncode($payload);
        if (self::$secret === null) {
            self::getSecret(); // Asegura que la clave secreta esté cargada
        }
        // Crear la firma usando HMAC SHA256
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, self::$secret, true);
        $base64UrlSignature = self::base64UrlEncode($signature);

        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }

    /**
     * Valida el JWT (Fast Check) y devuelve el payload si es correcto, o false si falló
     */
    public static function validate($token)
    {
        $partes = explode('.', $token);
        if (count($partes) !== 3)
            return false;

        list($base64UrlHeader, $base64UrlPayload, $base64UrlSignature) = $partes;
        if (self::$secret === null) {
            self::getSecret(); // Asegura que la clave secreta esté cargada
        }
        // Regenerar la firma para comparar
        $signatureValidacion = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, self::$secret, true);
        $base64UrlSignatureValidacion = self::base64UrlEncode($signatureValidacion);

        // Verificar que la firma coincida (hash_equals previene ataques de tiempo)
        if (!hash_equals($base64UrlSignature, $base64UrlSignatureValidacion)) {
            return false;
        }

        $payload = json_decode(self::base64UrlDecode($base64UrlPayload), true);

        // Verificar si ya expiró
        if ($payload['exp'] < time()) {
            return false;
        }

        return $payload; // Retorna ['sid' => X, 'exp' => Y]
    }
}
