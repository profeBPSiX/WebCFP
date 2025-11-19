<?php
if (isset($_GET['action'])) {
  switch($_GET['action']) {
      case 'addUser':
          $json_response = add_User();
          break;
      case 'filterDepartment':
          $json_response = filter_Department();
          break;
      case 'refreshUserTable':
          $json_response = refresh_User_Table();
          break;
      case 'loadUser':
          $json_response = load_update_User();
          break;
  }

  // PRINT THE JSON RESPONSE
  echo json_encode($json_response);
  return; exit;
}
?>