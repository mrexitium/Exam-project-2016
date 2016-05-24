# Exam-project-2016
##3rd semester exam project

## Setup GIT

### Mac users

#### Step 1

Install Git on your computer with this link


```
http://code.google.com/p/git-osx-installer/downloads/list?can=3
```

#### Step 2

Go to [github](http://github.com/) and create a user. After that tell me your Github user name so I can add you to the project.

#### Step 3

In the terminal go to your local project folder on your local server, and use this command:
```
$ git init
```

Then clone the repository with

```
$ git clone https://github.com/mrexitium/Exam-project-2016.git
```
Then you can set up Git so it is easier to use by running these commands
```
$ git config --global user.name "github username"
$ git config --global user.email youremail@gmail.com
```
You are now ready to do some work!

#### Step 4

When you start something new start by checking if your local code is up to date with the online repository by using
```
$ git pull
```
Then you can start working on a file, whenever you want to save that file you use

```
$ git add *
$ git pull
$ git commit -m "Message description of what you changed"
$ git push origin master
```
You can at all times check which files you have changed since your last commit by using 
```
$ git status
```

Read by Greta, and Jesper and Emilia

## Setting up wordpress

#### Step 1

Install Wordpress on the server, set up database and put the files in the theme folder.

#### Step 2

Log in as admin, enable the theme and create the following pages:
```
om os, kontakt, events, opstaldning, undervisning
```
#### Step 3
Go to Appearance - menu and create a menu called 

``` 
left menu
```
In this menu put the pages home, about and teaching, and set its position as left menu.

#### Step 4
Go to Appearance - menu and create a menu called 

``` 
right menu
```
In this menu put the pages livery, events and contact, and set its position as right menu.

#### Step 5 - Home page

Go to plugins and download the plugin Instagram Feed.
Activate it, go to Settings and login to instagram.
Uncheck the header, follow button and load more buttons, set number of photos to 4 and columns to 4.

Add a new post called with the category 

```
instagram
```
In the content field of this post write

```
[instagram-feed]
```

#### Step 6 - About page

##### History part

Create a new post called 'Historie', and give it the category 
```
about
```
then add an image as the featured img. And add the history of the company in the content field.

##### Staff part
For each staff member you want, create a new post with the category 
```
staff
```
and put their name as the title, their job as the content and their photo as the featured image.

##### Sponsor part

Add a new post with the title 
```
Sponsorer
```
and the content should be your text about sponsors, category has to be ```sponsors```.

Add one new post for each sponsor logo you want to show as featured img with the category ```sponsors-logo```

#### Step 7

Teaching page. Add 2 new posts with category 'teaching' and give them a landscape style foto as thumbnail, aswell as a title and content.

Add posts for all the horses with thumbnail pictures and category 'horses'.

#### Step 8

Opstaldnings page. Go to the opstaldning page and put in text on the content box, and give it a thumbnail picture.

#### Step 9

Events page. For each event create a new post with the date as the title, the description as content, and a short description as the excerpt, remember to set a thumbnail picture aswell. The category of these posts must be ```competitions```.

#### Step 10

Contact page @@@@ more content later


