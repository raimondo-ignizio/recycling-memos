<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Memos</title>
</head>
<body>
  <table>
    <tr>
      <th>Day</th>
      <th>From</th>
      <th>To</th>
      <th>Type</th>
    </tr>
    <?php
    use App\Models\Memo;

    foreach ($memos as $memo) {
      $data = $memo->toArray();
      echo
      "<tr>
          <td>{$data["day"]}</td>
          <td>{$data["hour_start"]}</td>
          <td>{$data["hour_end"]}</td>
          <td>{$data["type"]}</td>
          <td><form method='post' action='delete'>
              <button type='submit' name='id' value='{$data["id"]}'
              onclick='return confirm(`Are you sure? This action is irreversible!`);'>X</button>
              </form></td>
        </tr>";
          if ($memo->hour_start_2 && $memo->hour_end_2) {
            echo
            "<tr>
              <td></td>
              <td>{$data["hour_start_2"]}</td>
              <td>{$data["hour_end_2"]}</td>
              <td>{$data["type_2"]}</td>
            </tr>";
          }
          if ($memo->hour_start_3 && $memo->hour_end_3) {
            echo
            "<tr>
              <td></td>
              <td>{$data["hour_start_3"]}</td>
              <td>{$data["hour_end_3"]}</td>
              <td>{$data["type_3"]}</td>
            </tr>";
          }
    }
    ?>
  </table>

  <a href="delete-all"><button type="button"
  onclick="return confirm(`Are you sure? This action is irreversible!`);">Clean memos</button></a>
  <a href="form"><button type="button">Add memo</button></a>
  <a href="memo"><button type="button">All memos</button></a>
  <a href="today"><button type="button">Today's memos</button></a>
  <a href="week"><button type="button">Week's memos</button></a>
</body>
</html>
