<h1>Signifly Technical Test</h1>

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

<p>Visit the site in your browser at <a href="http://localhost">http://localhost</a>. You should see the Signifly Technical Test page.</p>


<p>Install <a href="https://tailwindcss.com/docs/guides/laravelp">Tailwind for Laravel</a></p>


<p>Install AlpineJs for Laravel with NPM <code>npm install alpinejs</code> or via a cdn link in your layout
<code><script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script></code></p>

<p>Install Precognition for Laravel and Alpine <code>
npm install laravel-precognition-alpine
</code> and update <code>resources/js/app.js</code> with this<br/>
<code data-theme="olaolu-palenight" data-lang="js" class="torchlight" style="background-color: #292D3E; --theme-selection-background: #7580B850;" id="clipText-28"><!-- Syntax highlighted by torchlight.dev --><div class="line"><span style="color: #C792EA;">import</span><span style="color: #BFC7D5;"> Alpine </span><span style="color: #C792EA;">from</span><span style="color: #BFC7D5;"> </span><span style="color: #D9F5DD;">'</span><span style="color: #C3E88D;">alpinejs</span><span style="color: #D9F5DD;">'</span><span style="color: #BFC7D5;">;</span></div><div class="line"><span style="color: #C792EA;">import</span><span style="color: #BFC7D5;"> Precognition </span><span style="color: #C792EA;">from</span><span style="color: #BFC7D5;"> </span><span style="color: #D9F5DD;">'</span><span style="color: #C3E88D;">laravel-precognition-alpine</span><span style="color: #D9F5DD;">'</span><span style="color: #BFC7D5;">;</span></div><div class="line">&nbsp;</div><div class="line"><span style="color: #BFC7D5;">window</span><span style="color: #C792EA;">.</span><span style="color: #89DDFF;">Alpine</span><span style="color: #BFC7D5;"> </span><span style="color: #C792EA;">=</span><span style="color: #BFC7D5;"> Alpine;</span></div><div class="line">&nbsp;</div><div class="line"><span style="color: #BFC7D5;">Alpine</span><span style="color: #C792EA;">.</span><span style="color: #82AAFF;">plugin</span><span style="color: #BFC7D5;">(Precognition);</span></div><div class="line"><span style="color: #BFC7D5;">Alpine</span><span style="color: #C792EA;">.</span><span style="color: #82AAFF;">start</span><span style="color: #BFC7D5;">();</span></div></code>
</p>

<p>Generate the SQLITE database <code>php artisan migrate</code> and

add some test employees <code>php artisan db:seed</code></p>

<h2>Useful Commands</h2>

<p>Launch the Docker container: <code>./vendor/bin/sail up</code> or <code>./vendor/bin/sail up -d</code> to run it in the background.</p>

<p>Shut down the Docker container: <code>./vendor/bin/sail down</code>.</p>

<p>Check the Docker container status: <code>./vendor/bin/sail ps</code>.</p>

<p>Run your laravel instance: <code>php artisan serve</code>.</p>

<p>If not already launch, run you vite instance for the frontend part: <code>npm run dev</code>.</p>
