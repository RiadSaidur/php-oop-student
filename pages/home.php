<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Stduents Information</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 py-5">
        <h1 class="text-center">Student Information</h1>

        <table class="mt-4 table table-bordered table-striped table-hover">
          <tr class="bg-secondary">
            <th class="text-white">Id</th>
            <th class="text-white">Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Phone</th>
          </tr>
          <!-- PHP BLOCK TO PRINT STDUENT INFOS -->
          <?php foreach ($students->getStudents() as $student) { ?>
            <tr>
              <?php foreach ($student as $info) { ?>
                <td>
                  <?php
                  if (is_array($info)) {
                    foreach ($info as $phone) { ?>
                      <?php 
                        echo $phone; 
                        if(next($info)) echo ', ';
                      ?>
                    <?php }
                  } else { ?>
                    <?php echo $info; ?>
                </td>
            <?php }
                } ?>
            </tr>
          <?php
          } ?>
        </table>

        <table class="mt-4 table table-bordered table-striped table-hover">
          <tr class="bg-secondary">
            <th class="text-white">Id</th>
            <th class="text-white">Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Phone</th>
          </tr>
          <?php
            foreach($students->getStudents() as $student) {
              echo "<tr>";
              foreach($student as $info) {
                echo "<td>";
                if(is_array($info)) {
                  foreach($info as $phone) {
                    echo $phone . PHP_EOL;
                    if(next($info)) echo ", ";
                  }
                } else {
                  echo $info . PHP_EOL;
                }
                echo "</td>";
              }
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </div>

</body>

</html>