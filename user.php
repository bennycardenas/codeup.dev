<?

require_once 'model.php';

Class User extends Model

{
    // Formerly:
    // protected static $table = 'users';

    //per Assignment:
    protected static $table = 'contacts';

}

echo User::getTableName();

