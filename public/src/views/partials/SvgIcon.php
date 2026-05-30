<?php
class SvgIcon
{
    private static array $icons = [

        'home' => '
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        ',

        'user' => '
            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5z"/>
        ',
        'square-arrow-right-exit' => '
            <path d="M10 12h11"/><path d="m17 16 4-4-4-4"/>
            <path d="M21 6.344V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-1.344"/>
        ',
        'circle-user-round' => '
            <path d="M17.925 20.056a6 6 0 0 0-11.851.001"/>
            <circle cx="12" cy="11" r="4"/>
            <circle cx="12" cy="12" r="10"/>
        ',
        'menu' => '
            <path d="M4 5h16" />
            <path d="M4 12h16" />
            <path d="M4 19h16" />        
        ',
        'search' => '
            <path d="M15.5 14h-.79l-.28-.27
            A6.471 6.471 0 0 0 16 9.5
            6.5 6.5 0 1 0 9.5 16
            a6.471 6.471 0 0 0 4.23-1.57
            l.27.28v.79L20 21.5 21.5 20l-6-6z"/>
        ',
        'mail' => '
            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
            <rect x="2" y="4" width="20" height="16" rx="2" />
        ',
        'map-pin' => '
            <path
                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
            <circle cx="12" cy="10" r="3" />
        ',
        'calendar' => '
            <path d="M8 2v4"/>
            <path d="M16 2v4"/>
            <rect width="18" height="18" x="3" y="4" rx="2"/>
            <path d="M3 10h18"/>
        ',
        'book' => '
            <path d="M12 7v14" />
            <path
                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />

        ',
        'clock' => '
            <circle cx="12" cy="12" r="10" />
            <path d="M12 6v6l4 2" />
        ',
        'check-big' => '
            <path d="M21.801 10A10 10 0 1 1 17 3.335" />
            <path d="m9 11 3 3L22 4" />

        ',
        'badge' => '
            <path
                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
            <circle cx="12" cy="8" r="6" />

        ',
        'alert' => '
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" x2="12" y1="8" y2="12"/>
            <line x1="12" x2="12.01" y1="16" y2="16"/>
        ',
        'clock-fading' => '
            <path d="M12 2a10 10 0 0 1 7.38 16.75"/>
            <path d="M12 6v6l4 2"/>
            <path d="M2.5 8.875a10 10 0 0 0-.5 3"/>
            <path d="M2.83 16a10 10 0 0 0 2.43 3.4"/>
            <path d="M4.636 5.235a10 10 0 0 1 .891-.857"/>
            <path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/>
        ',
        'circle-play' => '
            <path d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z"/>
            <circle cx="12" cy="12" r="10"/>
        ',
        'rotate-ccw' => '
            <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
            <path d="M3 3v5h5"/>
        ',
        'eye' => '
            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
            <circle cx="12" cy="12" r="3"/>
        ',
        'eye-off' => '
            <path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/>
            <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/>
            <path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/>
            <path d="m2 2 20 20"/>
        ',
        'download' => '
            <path d="M12 15V3" />
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <path d="m7 10 5 5 5-5" />
        ',
        'square-pen' => '
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/>
        ',
        'clapperboard' => '
            <path d="m12.296 3.464 3.02 3.956"/>
            <path d="M20.2 6 3 11l-.9-2.4c-.3-1.1.3-2.2 1.3-2.5l13.5-4c1.1-.3 2.2.3 2.5 1.3z"/>
            <path d="M3 11h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <path d="m6.18 5.276 3.1 3.899"/>
        ',
        'circle-arrow-right' => '
            <circle cx="12" cy="12" r="10"/>
            <path d="m12 16 4-4-4-4"/>
            <path d="M8 12h8"/>
        ',
        'clock-alert' => '
            <path d="M12 6v6l4 2"/>
            <path d="M20 12v5"/>
            <path d="M20 21h.01"/>
            <path d="M21.25 8.2A10 10 0 1 0 16 21.16"/>
        ',
        'minus' => '
            <path d="M5 12h14"/>
        ',
        'circle-check' => '
            <circle cx="12" cy="12" r="10"/>
            <path d="m9 12 2 2 4-4"/>
        ',
        'x' => '
            <path d="M18 6 6 18"/>
            <path d="m6 6 12 12"/>
        ',

    ];

    public static function render(
        string $name,
        int $size = 24,
        string $color = 'currentColor',
        string $fill = 'none',
        string $class = 'lucide lucide',
    ): string {

        if (!isset(self::$icons[$name])) {
            return '';
        }

        $svg = self::$icons[$name];

        return "
            <svg
                xmlns='http://www.w3.org/2000/svg'
                width='{$size}'
                height='{$size}'
                viewBox='0 0 24 24'
                fill='{$fill}' 
                stroke='{$color}' 
                stroke-width='2'
                stroke-linecap='round' 
                stroke-linejoin='round'
                class='{$class}{$name}'
                aria-hidden='true'
            >
                {$svg}
            </svg>
        ";
    }
}
?>