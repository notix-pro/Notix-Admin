/**
 * This function is used to hide $element in $timeout milliseconds.
 *
 * @param $element - item to fade out
 * @param $timeout - time in ms
 */
function hideElement($element, $timeout) {
    setTimeout(function () {
        $($element).fadeOut('slow');
    }, $timeout);
}
//------------------------------------------------------------------------------
