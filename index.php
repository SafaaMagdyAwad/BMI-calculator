<!-- 
  calculate bmi 
  (weight / height ^2) * 10^4
-->
<?php
$Height=180;
$Weight=65;
$BMI=($Weight/($Height**2))*(10**4);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMI calculator</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5 p-5">
      <h2 class="text-center fw-bold">BMI calculator</h2>
      <table class="table table-striped mx-auto mt-4" style="width: 50%;">
        <tr>
          <th>Height</th>
          <td class="text-end"><?php echo $Height?></td>
        </tr>
        <tr>
          <th>Weight</th>
          <td class="text-end"><?php echo $Weight ?></td>
        </tr>
        <tr>
          <th>BMI</th>
          <td class="text-end"><?php echo $BMI ?></td>
        </tr>
      </table>
      <?php
      if($BMI>35){
      ?>
      <p class="mx-auto mt-4 alert alert-danger" style="width: 50%;">
        <strong>Obesity!!</strong> Your BMI above 35.
      </p>
      <?php }elseif($BMI<=35 && $BMI>25){?>
      <p class="mx-auto mt-4 alert alert-warning" style="width: 50%;">
        <strong>Overweight!!</strong> Your BMI is between 25 and 35.
      </p>
      <?php }elseif($BMI<=25 && $BMI>18.5){?>
      <p class="mx-auto mt-4 alert alert-success" style="width: 50%;">
        <strong>Noraml!!</strong> Your BMI is between 18.5 and 25.
      </p>
      <?php }else{?>
      <p class="mx-auto mt-4 alert alert-primary" style="width: 50%;">
        <strong>Underweight!!</strong> Your BMI below 18.5.
      </p>
      <?php }?>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
