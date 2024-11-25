<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
$response = file_get_contents($URL);
$result = json_decode($response, true);

echo '<pre>';
print_r($result);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="style.css">
    <title>UOB Data API</title>
</head>
<body>
    <table class="striped">
        <tr>
            <th>Year</th>
            <th>Semester</th>
            <th>Program</th>
            <th>Nationality</th>
            <th>Number of students</th>
        </tr>
        <?php
            foreach ($result['results'] as $rs):?>
                <tr>
                    <td> <?php echo $rs['year'];?></td>
                    <td> <?php echo $rs['semester'];?></td>
                    <td> <?php echo $rs['the_programs'];?></td>
                    <td> <?php echo $rs['nationality'];?></td>
                    <td> <?php echo $rs['number_of_students'];?></td>
                </tr>
            <?php endforeach;?>
    </table>
</body>
</html>
