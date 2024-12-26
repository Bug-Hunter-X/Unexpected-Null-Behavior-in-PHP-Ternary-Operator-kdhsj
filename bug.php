function myFunc() {
  // This is an example of an uncommon PHP bug related to incorrect usage of the ternary operator.
  $value = isset($_GET['param']) ? $_GET['param'] : null;

  // The problem is that if 'param' is not set and is thus null, attempting to use it in an operation
  // may lead to unexpected results, potentially even warnings or errors depending on context.
  // For instance:
  $result = $value * 2;
  // If $value is null, this operation might lead to errors or 0 instead of a properly handled null.

  if ($value === null) {
    return "Parameter not set";
  } else {
    return $result;
  }
}