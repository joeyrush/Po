# Po
Objects to assist in reading, manipulating and creating GNU gettext style PO files.

## Examples

### Reading a PO File
```PHP
    try {
        $poFile = new PoFile();
        $poFile->readPoFile('test.po');
        // list all the messages in the file
        $entries = $poFile->getEntries();
        foreach($entries as $entry) {
            echo $entry->getAsString(PoTokens::MESSAGE);
        }
    } catch (UnrecognizedInputException $e) {
        // we had unrecognized lines in the file, decide what to do
    } catch (FileNotReadableException $e) {
        // the file couldn't be read, nothing happened
    }

```

### Get the Plural-Forms Header
```PHP
    $pluralRule = $poFile->getHeaderEntry()->getHeader('plural-forms');
```

### Add a New Entry
```PHP
    $entry = new PoEntry;
    $entry->set(PoTokens::MESSAGE, 'This is a message.');
    $entry->set(PoTokens::FLAG, 'fuzzy');
    $poFile->addEntry($entry);
```

### Writing a PO File
```PHP
    try {
        $poFile->writePoFile('test.po');
    } catch (FileNotWriteableException $e) {
        // the file couldn't be written
    }
```
### Create a POT File from PHP sources
```PHP
    $poFile = new PoFile();
    $poInit = new PoInitPHP($poFile);
    foreach (glob("*.php") as $filename) {
        try {
            $poInit->msginitFile($filename);
        } catch (FileNotReadableException $e) {
            // the souce file couldn't be read, decide what to do
        }
    }
    try {
        $poFile->writePoFile('default.pot');
    } catch (FileNotWriteableException $e) {
        // the file couldn't be written
    }
```

## API
For more information, see the full Po [API documentation](http://geekwright.github.io/Po/api/).
