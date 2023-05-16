<?php

/*
echo "# laravel_graphql_2023" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/makgaboemmanuel/laravel_graphql_2023.git
git push -u origin main */

# php artisan migrate

# php artisan tinker

# \App\Models\User::factory(15)->create()

# composer require nuwave/lighthouse

# composer require mll-lab/laravel-graphql-playground

# php artisan lighthouse:query Greetings

# please install GrphQL for Windows, and use the following URL to test

# the schema to provide is as follows:

/*

{
  greetings
}

*/
# http://127.0.0.1:8000/graphql

/* returned from the query:

{
  "data": {
    "greetings": "Hello World!"
  }
}

*/

#   php artisan lighthouse:query Users

# command ran below:

/*
    {
        user(id: 9) {

            name
            email
        }
    }
*/

/* response from Server:

{
  "data": {
    "user": {
      "name": "Raul Gleason",
      "email": "qjast@example.org"
    }
  }
}

*/


/* run query below:

{
  UserOne: user(id: 9) {
    name
    email
  }

    UserTwo: user(id: 1) {
    name
    email
  }
}


*/

/* query ran:

    {
    users (first: 1, page: 1) {
        data{
        name
        email
        }
        paginatorInfo {
        currentPage
        lastPage
        hasMorePages
        lastItem
        total
        }
    }
    }


*/

/* query ran

mutation {
  createUser (name: "Makgabo", email: "gudlukmme@gmail.com", password: "password") {
    id
    name
  }
}

*/

/*   query ran:

mutation {
  updateUser (name: "Emmanuel", email: "gudlukmme@gmail.com", id: 16) {
    id
    name
  }
}

*/

/* query ran:

mutation {
  deleteUser (id: 6) {
    id
    name
  }
}

*/


