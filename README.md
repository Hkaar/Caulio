# Caulio

[![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)
![Workflow Status](https://github.com/Hkaar/7Books/workflows/tests/badge.svg)

A web-based forum website created using Vue.js and Laravel

## Requirements

- PHP version >= 8.1
- Composer
- Node.js

## User Guide

Here's a guide for any users who want to host this on their own

Clone the repo

```bash
git clone https://github.com/Hkaar/Caulio.git
```

Go to the project directory

```bash
cd Caulio
```

Install all the php dependecies

```bash
composer install
```

Install all the node dependecies

```bash
npm install
```

Run the migrations

```bash
php artisan migrate
```

Generate the app key

```bash
php artisan key:generate
```

And then serve it

```bash
php artisan serve
```

## Contributor Guide

Here we will list the guide on how to contribute to this project

### Step 1 : Setup the project

Clone the repo

```bash
git clone https://github.com/Hkaar/Caulio.git
```

Go to the project directory

```bash
cd Caulio
```

Install all the php dependecies

```bash
composer install
```

Install all the node dependecies

```bash
npm install
```

Setup the env variables

`Bash :`

```bash
mv .env.example .env && cp .env .env.example
```

`Powershell :`

```powershell
Rename-Item .\.env.example .\.env ; Copy-Item .\.env .\.env.example
```

Run the migrations

```bash
php artisan migrate
```

Generate the app key

```bash
php artisan key:generate
```

And then serve to test if it's working

```bash
php artisan serve
```

### Step 2 : Work Setup

Go to the project directory (if you haven't done so)

```bash
cd Caulio
```

Update the master branch first

```bash
git pull origin master
```

Create a branch for your feature

```bash
git branch <your-feature>
```

And then switch your branch to your newly created one

```bash
git checkout <your-branch>
```

### Step 3 : How to work

If you want to save something, first add it to staging
by adding the root

```bash
git add .
```

or by adding a specific file

```bash
git add <file>
```

And then commiting it to the branch

```bash
git commit -m "<details-about-your change>"
```

### Step 4 : Uploading

Once done with developing your feature, upload it to the repo
by pushing it

```bash
git push origin <your-branch>
```

And then create a pull request for us to review and merge

### Step 5 : Cleanup

If the pull request is accepted, update your local repo with the changes

```bash
git checkout master
git pull origin master
```

```bash
git branch -d <local-branch-name>
```

### Tips

Don't forget to always do a pull from the remote master to update your local repo!

```bash
git pull origin master
```

And that's all, btw here's a table for your reward

ʕノ•ᴥ•ʔノ ︵ ┻━┻
