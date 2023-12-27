# NOOO Agency Starter Kit (Wordpress)
Php Starter Theme modified second the usual development process used by NOOO Agency Srl (Based on [php])
© Created and Developed by Luca


## Requirements

#### MacOS

- Terminal
- [Node.js](https://nodejs.org/)
- [NVM](https://github.com/nvm-sh/nvm) - Node Version Manager
- [AVN](https://github.com/wbyoung/avn) - Automatic Node Version Switch
- [Gulp](https://gulpjs.com)
- Local Server (Mac preinstalled Apache or [MAMP](https://downloads.mamp.info/MAMP-PRO/releases/5.7/MAMP_MAMP_PRO_5.7.pkg))

#### Windows

- Shell/Bash Emulator (like [Cmder](https://github.com/cmderdev/cmder/releases/download/v1.3.14/cmder.zip))
- [Node.js](https://nodejs.org/)
- [NVM](https://github.com/nvm-sh/nvm) - Node Version Manager
- [AVN](https://github.com/wbyoung/avn) - Automatic Node Version Switch
- [Gulp](https://gulpjs.com)
- Local Server ([MAMP](https://downloads.mamp.info/MAMP-PRO-WINDOWS/releases/4.1.1/MAMP_MAMP_PRO_4.1.1.exe) or [XAMPP](https://www.apachefriends.org/xampp-files/7.2.27/xampp-windows-x64-7.2.27-0-VC15-installer.exe))

-------------------------------------------------------

# Pre-Setting

## 1. Node.js Installation

1.  Install Node.js from the link below.

2.  Run the instructions

3.  Check if *node* is correctly installed:

    `$ node -v`

4.  Check if npm command is available with:

    `$ npm -v`

## 2. NVM - Node Version Manager Installation

1.  Install Node Version Manager (NVM)

2.  Then you only need to load NVM

3.  As final step you could install the latest stable version, after you reboot your terminal

    `$ nvm install stable`

## 3. AVN - Automatic Node Version Switcher

Often, when you work on an already started project you could meet some error with `$ npm ...`, that's is caused probably because your machine have set a Node version different to the Node Version the project use.
To solve that error we could use AVN (Automatic Node version Switcher). That plugin allows the terminal to detect the Node Version used in the project (reading the hidden file **.node-version**) and when you type `$ cd project-folder` in your terminal, AVN automatically switch to that Node Version.
So these are the two steps to install AVN correctly.

1.  Install AVN runnig the command

    `$ npm install -g avn avn-nvm avn-n`

2.  Setup AVN running the command

    `$ avn setup`


## 4. Gulp Installation

Gulp is a pre-required toolkit for compile all the project's file.

1.  After installed Node.js you could run the line below to install gulp globally.

    `$ npm install gulp-cli -g`

2.  Check if *gulp* is correctly installed:

    `$ gulp -v`

-------------------------------------------------------

# Create a NOOO Project

> ⚠️ **Remind** *First of all: Ask to* **bruno.verneau@nooo.it** *the access to the repository of the project.*

> After the pre-setting, described above, you could create a new project using the NOOO Starter Script. The NOOO Starter Script run those tasks:


>       1️⃣  Clone Project Repository (if the repository already exist)

>       2️⃣  Installing Wordpress

>       3️⃣  Installing the NOOO Starter Theme

>       4️⃣  Installing the must have plugins (ACF Pro, etc..)

>       5️⃣  Setting the node_modules (package.json)

>       6️⃣  Create the MySQL Database

>       7️⃣  Print the project virtual-host

>       8️⃣  Printing the project vhost

>       9️⃣  First commit on the repo → 'Init Project' (if the repository already exist)

-------------------------------------------------------

## 1. Init Project

If you have the access to the repo, you could pass to the next steps:

1.  Download or clone the Repo from Bitbucket

2.  Create the vhost in your **vhost** file.

3.  Create your hosts in your [**hosts**] file*.


## 2. Setting up your Project Backend

### Config your Wordpress Project via backend

#### Connect DB to your Wordpress (only if wp-config.php generation is not automated)

1. Open with your development Browser (Chrome or Safari) the url '**project-name.noooserver.com/wp-admin**'

2. In the database name input insert **projectname_db** 

3. In the user_db input insert '**root**'.

4. In the db password input insert '**root**'.

5. In the db_host leave **localhost**.

6. Insert a meaningfull table prefix.

#### Set your Wordpress Site's Info

1. Open with your development Browser (Chrome or Safari) the url '**project-name.noooserver.com/wp-admin**'

2. In the site-title input insert **Projectname** 

3. In the username input insert your **namesurname** 

4. Choose the password you want.

5. Insert your **nooo.mail** 

6. Check the '**Discourages search engines**'.

## 3. Setting up your Wordpress

1. Login to your backend with the user created before.

2. From the Wordpress Backend do those tasks:

    1. *Appearance > Themes* : activate **Starter** theme

    2. *Plugins > Installed Plugins* : activate all the plugins installed

    3. *Setting > Reading* : set your homepage as a **static page** (put the Example page, after you could rename it to 'Homepage')

    4. *Setting > Permalinks* : set your 'Common Settings' to **Post name**

    5. *Pages > Example Page -- Front Page* : change title to '**Homepage**', delete the content of the page, under 'Page Attributes > Template' set it to '**Homepage**'

-------------------------------------------------------

# Start Coding

Now you're ready to code your new Wordpress.

#### Technology used

- HTML
- PHP
- SCSS ([Sass Style Language](https://sass-lang.com/documentation))
- JS

#### Framework used

- [Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

#### Theme Structure

Below there is the theme structure. The most important folders are:

1. **assets** : where you set the SCSS and JS, and add some assets like imgs, fonts, video, etc..
2. **templates** : where you write your HTML structure, using ***.php*** files

- projecttheme
    - **assets**
        - fonts
        - images
            - icons
            - vectors
        - js
            - modules
            - renderers
            - themes
            - utils
            - ***main.js***
        - scss
            - abstracts
            - base
            - layout
            - mixins
            - pages
            - themes
            - ***main.scss***
        - video
    - node_modules
    - **templates**
        - components
        - layout
        - pages
        - partials

## Run Gulp and Code everything you need

When you start develop your project, we suggest you to install all node modules with *npm install* and compile everything using *gulp*.

We Already prepare a **gulpfile.js**, so you could open the terminal and:

1. Open Terminal in your project theme folder (project/wp-content/themes/projecthemename). You could run `$ cd yoursitespath/project/wp-content/themes/projecthemename`

2. Run the `$ gulp build` for compile everything you added/coded until now or simply `$ gulp` to watch everything you add/code in realtime, with BrowserSync automatic refreshing at `'projectname.noooserver.com:3000'` on your browser.

3. When the project will be online use `$ npm run build`for compile everything and build the `critical.css`

-------------------------------------------------------

### 🔥 Tips

\* ⚠️ *MacOS Only*: Be faster in changing the hosts file, you could download **[iHosts](https://apps.apple.com/app/id1102004240?ls=1&mt=12)**

-------------------------------------------------------

### 👇 Any Questions?

- Bruno Verneau (bruno.verneau@nooo.it)

You could contact those people, for let you understand everything you need.
