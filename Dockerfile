FROM dunglas/frankenphp:php8.4.21-bookworm

# Install PostgreSQL development libraries
RUN apt-get update && apt-get install -y libpq-dev && rm -rf /var/lib/apt/lists/*

# Install PostgreSQL extensions
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Copy application code
COPY . /app

# Set working directory
WORKDIR /app

# Expose port
EXPOSE 80

# Start FrankenPHP
CMD ["frankenphp", "run", "--bind=0.0.0.0:80"]

