<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/xbugszone/sourcesbot">
    <img src="images/header.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">RC Sources</h3>

  <p align="center">
    Your one-stop site for reliable international RC vendors. Ratings are sources from the community and periodically updated. 
    <br />
    <a href="https://github.com/xbugszone/sourcesbot"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/xbugszone/sourcesbot">View Demo</a>
    ·
    <a href="https://github.com/xbugszone/sourcesbot/issues">Report Bug</a>
    ·
    <a href="https://github.com/xbugszone/sourcesbot/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

<p align="right">(<a href="#top">back to top</a>)</p>

### Built With

-   [PHP 7.3](https://www.php.net)
-   [Laravel 8.65](https://laravel.com)
-   [MySQL](https://mysql.com) / [MariaDB](https://go.mariadb.com)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

### Prerequisites

You will need to have the following installed for local development:

-   PHP v(^7.3 or ^8.0)
-   Composer v(2.1)
-   MySQL/MariaDB

#### Arch Based System:

##### PHP/Composer:

```sh
sudo pacman -Sy php composer
```

##### MySQL/MariaDB

MariaDB is the preferred open source alternative to MySQL and has _almost_ complete parity of features with MySQL:

```sh
sudo pacman -Sy mariadb
```

Follow the instructions for securing your local MariaDB instance [here](https://wiki.archlinux.org/title/MariaDB#Installation) _before_ running a local MariaDB instance.

MySQL:
Refer to [MySQL's website](https://www.mysql.com/) for instruction on how to install.

#### Debian/Ubuntu Based System:

##### PHP/Composer:

```sh
sudo apt install wget php-cli php-zip unzip
wget -O composer-setup.php https://getcomposer.org/installer
```

The `wget` command will save the file as `composer-setup.php` in the current working directory.

Composer is a single file CLI application and can be installed either globally or as part of the project. The global installation requires `sudo` privileges.

-   To install Composer globally as a system-wide command that will be available for all users, simply place the file in a directory that is in the system PATH . Run the following command to install Composer in the /usr/local/bin directory:

    -   `sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer`
    -   You can now use Composer by running `composer` in your terminal.

-   To install composer locally enter:
    -   `sudo php composer-setup.php --install-dir=/path/to/project`

##### MySQL/MariaDB

MySQL:

```sh
sudo apt install mysql-server
```

MariaDB:

```sh
sudo apt install mariadb-server
```

After installing _either_ MariaDB or MySQL and _before_ starting a local instance of the database server, you’ll want to run the DBMS’s included security script. This script changes some of the less secure default options for things like remote root logins and sample users.

```sh
sudo mysql_secure_installation
```

#### Post Installation of PHP/Composer and MariaDB/MySQL

Enable the appropriate database extensions for php. With super user privileges, edit `/etc/php/php.ini` and uncomment the following lines:

```ini
;extension=mysqli
;extension=pdo_mysql
```

to

```ini
extension=mysqli
extension=pdo_mysql
```

#### Other Systems

Please refer to [PHP Website](https://www.php.net) and [GetComposer](https://getcomposer.org/) for guidance on how to install on your particular system.

### Installation and configuration of development environment

1. Clone the repo
    ```sh
    git clone https://github.com/xbugszone/sourcesbot.git
    ```
2. Change into the project's directory
    ```sh
    cd sourcesbot
    ```
3. Install PHP packages
    ```sh
    composer install
    ```
4. Create database table taking care to note credentials
    ```SQL
    CREATE DATABASE [name];
    ```
5. Copy `.env.example` to `.env`
    ```sh
    cp .env.example .env
    ```
6. Configure `.env` using your favorite text editor and adjust settings accordingly
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[database name]
    DB_USERNAME=[database username]
    DB_PASSWORD=[database password]
    ```

7. Generate your application key (the following command updates your `.env` accordingly)
    ```sh
    php artisan key:generate
    ```

8. Generate and migrate tables
    ```sh
    php artisan migrate:fresh
    ```

9. Run a local instance
    ```sh
    php artisan serve
    ```

 <p align="right">(<a href="#top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->

## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- ROADMAP -->

## Roadmap

-   [] Feature 1
-   [] Feature 2
-   [] Feature 3
-   [] Nested Feature

See the [open issues](https://github.com/xbugszone/sourcesbot/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Your Name - [@twitter_handle](https://twitter.com/twitter_handle) - email@email_client.com

Project Link: [https://github.com/xbugszone/sourcesbot](https://github.com/xbugszone/sourcesbot)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->

## Acknowledgments

-   [Best-README-Template](https://github.com/othneildrew/Best-README-Template)
-   []()
-   []()

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/xbugszone/sourcesbot.svg?style=for-the-badge
[contributors-url]: https://github.com/xbugszone/sourcesbot/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/xbugszone/sourcesbot.svg?style=for-the-badge
[forks-url]: https://github.com/xbugszone/sourcesbot/network/members
[stars-shield]: https://img.shields.io/github/stars/xbugszone/sourcesbot.svg?style=for-the-badge
[stars-url]: https://github.com/xbugszone/sourcesbot/stargazers
[issues-shield]: https://img.shields.io/github/issues/xbugszone/sourcesbot.svg?style=for-the-badge
[issues-url]: https://github.com/xbugszone/sourcesbot/issues
[license-shield]: https://img.shields.io/github/license/xbugszone/sourcesbot.svg?style=for-the-badge
[license-url]: https://github.com/xbugszone/sourcesbot/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png

```

```

```

```

```

```

```

```

```

```
