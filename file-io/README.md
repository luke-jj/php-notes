# File-IO in PHP

## FileSystem
[FileSystemFunctions](http://php.net/manual/en/ref.filesystem.php)

    chdir() — Change directory
    chroot() — Change the root directory
    closedir() — Close directory handle
    dir() — Return an instance of the Directory class
    getcwd() — Gets the current working directory
    opendir() — Open directory handle
    readdir() — Read entry from directory handle
    rewinddir() — Rewind directory handle
    scandir() — List files and directories inside the specified path
    pathinfo()

    dirname()
    is_dir()
    mkdir()
    rmdir()

    file_exists()
    chmod()
    chown()

## File Handling Options
1. Open a file stream, connection + handling line by line
2. Load the entire file as a string
3. Load the entire file as an object or array

    fopen($path, $mode)
    feof($file) -> bool             return true if end of file
    fgets();
    fwrite()                        Binary-safe file write
    fputs()                         Alias of fwrite
    fclose();

    file_get_contents($path)        return the entire file as string
    file($path)                     return the entire file as an array of lines

### File Modes
    r	      Open a file for read only.
    w	      Open a file for write only. Erase content / create new file
    a	      Open a file for write only. Preserve content / create new file
    x	      Creates new file for write only. Returns FALSE error if file exists
    r+	    Open a file for read/write.
    w+	    Open a file for read/write.
    a+	    Open a file for read/write.
    x+	    Creates a new file for read/write. error if file exists


## CSV - (database, spreadsheet)
    fgetcsv($fileheader) -> array     read one row from csv file 
    fputcsv($fileheader, $array)      add new row to csv file


## JSON - (APIs, webtraffic)
    json_decode(string[, bool $assoc = false]) -> object
    json_encode(string[, ...options]) -> string

    file_put_contents($fh, $string)       add encoded string to .json file

if $assoc is true the objects will be transformed into associative arrays.


## XML (feeds)
read the file as usual and use the htmlspecialchars() method to escape tags.

    simplexml_load_file(string $filename) -> object

    asXML()
