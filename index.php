<?php
/** CONFIGURATION SETTINGS **/

define('IDX_SOURCE_FILE', './index.json');
define('TEMPLATES_DIR', './templates');

/** ACTUAL CODE **/
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getIndex();
} else {
    die('Not yet implemented');
}

/** FUNCTIONS **/

/**
 * Display the index
 * @return string HTML for output
 */
function getIndex()
{
    try {
        $json = file_get_contents(IDX_SOURCE_FILE);
        if ($json === false) {
            throw new Exception('Could not read index source file ' . IDX_SOURCE_FILE);
        }
        $data = json_decode($json, true);
        if ($data === null) {
            throw new Exception('Could not decode JSON data');
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
    return render('index', $data);
}

/**
 * Render a certain template
 * @param  string     $template The name of the template
 * @param  array|null $data     An array of data the template may want to parse
 * @return string               The output of the template
 */
function render($template, array $data = null)
{
    $tpl = TEMPLATES_DIR . '/' . $template . '.tpl.php';
    if (file_exists($tpl) && is_readable($tpl)) {
        ob_start();
        include($tpl);
        $output = ob_get_clean();
    } else {
        $output = 'Rendering error: Template file ' . $tpl . ' is unreadable.';
    }
    return $output;
}
