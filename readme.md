# Laravel Clean Blog Tutorial
## Setup Laravel with Voyager admin
1. composer create-project --prefer-dist laravel/laravel blog
2. set up connection configs in the .env file
3. php artisan make:auth
4. [php artisan migrate](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/6a7cfd0852392459ad028e88174700789019e092)
5. [composer require tcg/voyager](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/17c3a827ce74a888d1d8527a8f3e56bae1f67df6)
6. php artisan voyager:install --with-dummy

Then you can login to your admin panel from `http://yourdomain.com/admin` using `email: admin@admin.com   password: password`.

## Add Clean Blog
1. [Add Clean Blog templates](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/36bf3047cec2b06fd6ba5d9d0e96e2c4f37b9567)
2. [Add Clean Blog routes & remove unused routes](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/9c7b4c6340bc336c4447107eebe576895fe2abcd)
3. [Clean up templates](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/30faa23603ba8d08a6460d5d984dfb34c5543c44)
4. [Simple posts list and single-post route based on Voyager posts](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/ef06a615b4d4d04732f973d3d3da9b6daf5d82e6)
5. [Single post page](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/e450b83420152ff73dba68b4c1fceb534126ac2c)
6. [Add time order & pagination for posts list](https://github.com/Gilg4mesh/LaravelCleanBlogTutorial/commit/21a5a948112baa7ace795dee40edf42c3c5a61c4)