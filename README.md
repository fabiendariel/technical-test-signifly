<h1>Dupray Technical Test 2024</h1>

<h2>Installation</h2>

<p>Follow the instructions below to quickly set up a local Laravel developement environment using <a href="https://www.docker.com">Docker</a> and <a href="https://laravel.com/docs/11.x/sail">Laravel Sail</a>. The commands below must be run from a Unix/Linux environment. If you are running Windows, you should have the <a href="https://learn.microsoft.com/en-us/windows/wsl/install">Windows Subsystem for Linux (WSL)</a> set up and installed on your computer. This is beyond the scope of the project, so you must set this up on your own.</p>

<p>Install <a href="https://www.docker.com/products/docker-desktop">Docker Desktop</a> if you do not have it installed on your computer.</p>

<p>If you were provided with access to the online GitHub repository, please clone the repository using the GitHub cloning links and proceed to the next step below.</p>

<p>Install the Composer dependencies using the Docker command below. This will download and create a temporary Docker container that will install the Composer packages to the <code>vendor</code> directory.</p>

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

<p>Run the following command to initialize the Docker environment: <code>./vendor/bin/sail up</code>. Please be patient as this may take a few minutes.</p>

<p>Make a copy of the <code>.env.example</code> file and rename the copied file to <code>.env</code>.</p>

<p>Generate a new Laravel app key using the following command: <code>./vendor/bin/sail artisan key:generate</code>.</p>

<p>Install the Node dependencies using the following command: <code>./vendor/bin/sail npm ci</code>.</p>

<p>Visit the site in your browser at <a href="http://localhost">http://localhost</a>. You should see the Dupray Technical Test page.</p>

<p>Start developing.</p>

<h2>Useful Commands</h2>

<p>Launch the Docker container: <code>./vendor/bin/sail up</code> or <code>./vendor/bin/sail up -d</code> to run it in the background.</p>

<p>Shut down the Docker container: <code>./vendor/bin/sail down</code>.</p>

<p>Check the Docker container status: <code>./vendor/bin/sail ps</code>.</p>
