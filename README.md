# Gym-Membership-Laravel

## Installation

Meet Laravel 5.6 requirements

Clone this repository

Set your database configuration with .env or your preferred method.

run the command: php artisan migrate --seed

run the command: php artisan serve

view the site at 127.0.0.1:8000 (by default)

login with the default credentials:

email: test@example.com

password: gym123

## Scenario

A new gym has opened that needs a system for taking new memberships. Listed are the requirements from the product owner.

An admin must be able to log into a portal and add a new member

An admin should also be able to see a list of members and choose to edit an existing member

An admin would like to be able to run reports about how many members have joined for a specified month

Members can choose between monthly and annual subscriptions.

## Notes

Members can choose between monthly and annual subscriptions. The annual price will remain unaffected by this choice.

A member must provide the following details:

First name, last name, email, address

A member can choose to provide the following details:

Date of birth, telephone number

Reports can be in the form of a CSV/table. As long as the data can be found.

## Technical Notes

A new laravel project should be created and used for the scenario.

A database is needed to hold the data.

To submit the scenario, a version control repository link (GitHub) is preferable.


