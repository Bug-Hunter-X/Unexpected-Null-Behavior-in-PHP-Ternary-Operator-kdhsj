function myFunc() {
  // Improved version with explicit null handling.
  $value = isset($_GET['param']) ? $_GET['param'] : null;

  // Properly handle the null case to avoid potential errors.
  if ($value === null) {
    return "Parameter not set";
  } else if (!is_numeric($value)) {
    return "Parameter is not a number";
  } else {
    $result = $value * 2;
    return $result;
  }
}
//Adding input validation to handle non-numeric input