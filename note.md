>composer global require laravel/installer
>laravel new laravel-mvc
>php artisan migrate
>php artisan make:view register

<<LEARN HOW-TO>>

> Pull data from the URL query string

We just use the request function pass in the query parameter name.
And then that will give us the value for that parameter, if that parameter is in the query string.
Otherwise, we don't get anything. 

<<Blade Template Inheritance>>

Routing in Laravel is the process of directing HTTP requests to specific controllers or closures. To display a Blade template, you first define a route in the routes/web.php file.

This route uses a closure to return the welcone.blade.php view when the /welcome URL is accessed. Laravel's routing system is incredibly flexible, allowing for the passing of data to views, route parameters, and the use of controllers.

Blade simplifies embedding PHP in HTML. {{$variable}} displays a variable, with Blade handling HTML entity escaping.

Blade's template inheritance feature promotes code reusability. By defining a master layout with common elements, you can extend this layout in other views using @extends, @section and @yield. This DRY approach streamlines view creation and maintains consistency across your application.

In this layout, @yield('title') and @yield('content') are placeholders for content that will be filled by the child views.

<<TASK>>

<<<Authenticate Admin User>>>

https://github.com/phptechlife/laravel_10_ecomm_templates

+ [ ] Create admin login interface
+ [ ] Create guards and providers for admin authentication
+ [ ] Run migration and create a role column in the users table
+ [ ] Create an admin user with tinker
+ [ ] Create and register middlewares
+ [ ] Apply form validation and authenticate the user

<GIT>

Just enough Git to be productive

    There are different Git workflows - Trunk, GitFlow, GitHubFlow
    Git and GitHub are not the same thing - Going to be using
    Command line & VSCode extension

    Have a GitHub account and Git installed

Terms

    Branch - Commit - Stage - Merge - Pull Requests

    Branch: A version of the codebase
    Commit: A unit of change
    Stage
    Merge: Combining two branches
    Pull request: A request to merge a branch into another branch

Definition

    Git is a version control system that allows you to track changes to your code over time, enables you to collaborate with others on the same codebase. 
    You can easily revert to a previous version of your code or experiment with new features without affecting the main codebase.
    Provides a record of all changes made to your code, including who made them and when, which can be useful for auditing and debugging.

Common tasks

    How to create a new repository? 
    How to create a new branch? 
    How to make changes on my branch? 
    How to push changes to GitHub? 
    How to merge my changes into the main branch? 
    How to create a pull request? 
    How to check the status of my repository? 
    How to manage conflicts? 
    How to remove a file and make sure it's not tracked by Git? 

Commands

    git init - git status - git add - git commit - git log - git status - git branch - git checkout - git pull - git push

    git init: Initialize a new Git repository
    git status: Show the status of the current branch
    git add: Add a file to the staging area
    git commit: Commit the staged files to the current branch
    git log: Show the commit history of the current branch
    git branch: List the branches in the current repository
    git checkout: Switch to a different branch
    git pull: Pull the latest changes from the remote repository
    git push: Push the latest changes to the remote repository

Tips
    
    Use the GitHub VSCode extension
    Commit early and often
    Use semantic commit messages
    Make small pull requests - single feature or bug fix
    Use the Github pull request template
    Write descriptive pull requests
    Ask team about conflict resolution strategy - rebase or merge
    Ask team about commit strategy - squash or merge
    Ask team about workflow- trunk, gitflow, githubflow






