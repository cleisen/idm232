<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Users';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database, here you can decide the columns shown
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div>


  <div>
    <div>
      <div>
        <h1>Recipes</h1>
        <p>A list of all the recipes on the site</p>
        <?php
          if (isset($_GET['error'])) {
              echo "<p>Error: " . $_GET['error'] . '</p>';
          }

?>
      </div>
      <div>
        <button type="button">
            <a href="<?php echo site_url() . '/add.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <table>
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Difficulty
                  </th>
                  <th scope="col">Cook Time</th>
                  <th scope="col">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
    while ($user = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$user['id']}</td>
                <td>{$user['first_name']} {$user['last_name']}</td>
                <td>{$user['email']}</td>
                <td>{$user['phone']}</td>
                <td>
                  <a href='http://localhost:8888/final/admin/users/edit.php?id={$user['id']}' >Edit</a>
                  <a href='http://localhost:8888/final/admin/users/delete.php?id={$user['id']}' >Delete</a>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';