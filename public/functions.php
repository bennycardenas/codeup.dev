<?


function inputHas($key)
{
    if (isset($_REQUEST[$key]))
    {
        return true;
    }
    
    return false;
}


function inputGet($key)
{
    if (isset($_REQUEST[$key]))
    {
        return ($_REQUEST[$key]);
    }

    return null;
}


function escape($input)
{
    echo htmlspecialchars(strip_tags($input));
}

?>