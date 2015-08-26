1. Clone repo

2. Run ansible-playbook to create vagrant site

3. Create a database with ansible commands

4. Update your hosts file

5. Create your own .env.local.php file

6. run composer install

##Troubleshooting
- if a class name is not found and you see the file containing it, try running composer dump-autoload from your vm.

- to run migration, enter php artisan migrate --seed