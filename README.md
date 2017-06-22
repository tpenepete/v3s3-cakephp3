# v3s3-cakephp3
A simple storage system RESTful API written in CakePHP 3

This is part of a collection of repositories which provides an implementation of a simple storage system RESTful API using different PHP Frameworks. The project aims to directly compare the differences in setup and syntax between each of the represented frameworks.

See the Wiki page for a hyperlinked list of all the repositories in the collection.

<hr />

# INSTALLATION AND IMPLEMENTATION SPECIFICS
```
cd path/to/htdocs
composer self-update && composer create-project --prefer-dist cakephp/app CakePHP_ROOTDIR
```
(where CakePHP_ROOTDIR is the preferred name of your CakePHP root directory within htdocs)

If you plan to use the **example_apache_virtualhost.conf** configuration you must rename the **.htaccess** files in **path/to/CakePHP_ROOTDIR** and **path/to/CakePHP_ROOTDIR/webroot** to **.htaccess.dist**.

The PHP Intl extension must be enabled in order to install CakePHP 3 using composer and run it.

A note to Windows users:<br />
After enabling the extension in **php.ini** you might find that it is not available on the `phpinfo()` page. On the other hand running `php -m` or `php -i` might show that the extension is working. Depending on your setup you might get the following startup error logged in the Apache error logs:<br />
```
[PHP Warning:  PHP Startup: Unable to load dynamic library 'path\to\php\ext\php_intl.dll' - The specified module could not be found.]
```
This seems to be caused by a dependency peculiarity of the Apache for Windows distribution. In such cases the 3rd party dependencies must be copied over to the Apache bin directory.<br />
The PHP Intl extension makes use of the International Components for Unicode (ICU) lib which consists of a number of **.dll** files residing in the root directory of your PHP installation. In order to fix the problem copy all **.dll** files starting with "icu" (icu*.dll) to the Apache bin directory and restart the server.

CakePHP 3 provides a command-line code generator tool called **cake.php**. We can save some time by using it to auto-generate the MVC skeleton.
```
cd path/to/CakePHP_ROOTDIR
composer require --dev cakephp/bake:~1.0
```

To be able to create the MVC skeleton we need to setup a database connection. It is possible to add a local configuration file and exclude it from the project using a **.gitignore** file. Create a file called **database_local.php** in the **path/to/CakePHP_ROOTDIR/config** directory and provide the necessary database connection details and also create the **.gitignore** file with the necessary pattern. The MVC skeleton generator utility requires that the API store database table has the same lowercase name as that of the module. For example if the name of the module we are creating the MVC skeleton for is called "V3s3" then the name of the database table needs to be "v3s3". The newly added config file must be loaded from within the **path/to/CakePHP_ROOTDIR/config/bootstrap.php** file. The name of the connection must be specified in the bake command. Once the command has been run we can change the name of the table and update the **V3s3Table** `initialize()` method with the new name.

Now we can run cake.php and create the MVC skeleton.
```
cd path/to/CakePHP_ROOTDIR
php .\bin\cake.php bake all V3s3 --connection V3s3
```

The command creates all necessary MVC components for the module **V3s3**. We can proceed with modifying the controller and table model files. In CakePHP 3 the model, view, controller, etc... files are not separated per module.

The routes are specified in the **path/to/CakePHP_ROOTDIR/config/routes.php** file. Each of the four HTTP methods supported by the API is mapped to a method in the **path/to/CakePHP_ROOTDIR/src/Controller/V3s3Controller.php** class.

The rest of the files we need are the **V3s3Html** and **V3s3Xml** helpers and the **V3s3Exception** class. Create folders named "Exception" and "Helper" within the **path/to/CakePHP_ROOTDIR/src** directory then create the appropriate files and namespace the classes accordingly.

By default CakePHP 3 supports two types of gettext language file formats - **.po** and **.mo**. For this example we will use the **.po** format. The language files reside within **path/to/CakePHP_ROOTDIR/src/Locale/_<language or locale ID>_**. Within each language directory we need to have the default domain file called "**default.po**". Our V3s3 translation file will be called "**V3s3.po**".

Model specifics:<br />
- The **V3s3Table** GET method (function) name must not be "get" as it conflicts with the parent **\Cake\ORM\Table** class' method with the same name as an implementation of the method is required by the **\Cake\Datasource\RepositoryInterface**.
- CakePHP 3 casts all database binary field values (like BLOB) to a resource of type stream using `fopen()` and passing the base64 encoded string value. There is no apparent way to control this behavior so the `stream_get_contents()` function has been used in the **V3s3Table** class methods which retrieve data from the table in order to convert it to string.
- Calling `$rows->toArray()` on a **\Cake\ORM\ResultSet** containing multiple table rows returns an array of entity objects. Fortunately ResultSet provides a `map()` method which we can use to map a function to convert the individual entities to arrays before calling `toArray()` on the **ResultSet** itself thus converting the whole collection to a multi-dimensional array.

Notable new/modified project-specific files:<br />
**path/to/CakePHP_ROOTDIR/.htaccess** (rename to .htaccess.dist if you want to use the provided example_apache_virtualhost.conf configuration)<br />
**path/to/CakePHP_ROOTDIR/webroot/.htaccess** (rename to .htaccess.dist if you want to use the provided example_apache_virtualhost.conf configuration)<br />
**path/to/CakePHP_ROOTDIR/config/.gitignore** (create file with the proper pattern)<br />
**path/to/CakePHP_ROOTDIR/config/bootstrap.php** (add line 88-92)<br />
**path/to/CakePHP_ROOTDIR/config/routes.php** (add line 87-124)<br />
**path/to/CakePHP_ROOTDIR/src/Exception/V3s3Exception.php** (user created)<br />
**path/to/CakePHP_ROOTDIR/src/Controller/V3s3Controller.php** (created using the "cake bake" utility and user edited)<br />
**path/to/CakePHP_ROOTDIR/src/Model/Entity/V3s3.php** (created using the "cake bake" utility)<br />
**path/to/CakePHP_ROOTDIR/src/Model/Table/V3s3Table.php** (created using the "cake bake" utility and user edited)<br />
**path/to/CakePHP_ROOTDIR/src/Helper/V3s3Html.php** (user created)<br />
**path/to/CakePHP_ROOTDIR/src/Helper/V3s3Xml.php** (user created)<br />
**path/to/CakePHP_ROOTDIR/src/Locale/en/default.po** (user created)<br />
**path/to/CakePHP_ROOTDIR/src/Locale/en/V3s3.po** (user created)