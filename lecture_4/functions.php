<?php
    function F1(){
        echo "<h1>Hello Dear Students!!!</h1>";
    }

    F1();

    function F2($x, $y, $z = 9){
        return $x + $y - $z;
    }

    echo F2(10, 20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="Form-Box" style="">
        <h1 style="margin-bottom: 30px">PHP Form Validation Example</h1>
        <form Method="post" class="Validation-From">
            <div class="form-row">
                <label>Name:</label>
                <input type="text" name="name">*
                <span class="error"><?php echo isset($_POST['name']) && empty($_POST['name']) ? "Name is required" : ""; ?></span>
            </div>

            <div class="form-row">
                <label>Email:</label>
                <input type="text" name="email">*
                <span class="error"><?php echo isset($_POST['email']) && empty($_POST['email']) ? "Email is required" : "" ?></span>
            </div>

            <div class="form-row">
                <label>Website:</label>
                <input type="text" name="website">*
                <span class="error"><?php echo isset($_POST['website']) && empty($_POST['website']) ? "Website is required" : ""; ?></span>
            </div>

            <div class="form-row">
                <label>Comment:</label>
                <input type="text" name="comment">*
                <span class="error"><?php echo isset($_POST['comment']) && empty($_POST['comment']) ? "Comment is required" : ""; ?></span>
            </div>
            
            <fieldset class="gender-box">
                <legend>Gender:</legend>
                <label>
                    <input type="checkbox" name="gender" value="Female">
                    Male
                </label><br>
                <label>
                    <input type="checkbox" name="gender" value="Male">
                    Female
                </label><br>
                <label>
                    <input type="checkbox" name="gender" value="Other">
                    Other
                </label><br>
            </fieldset>

            <button type="submit" name="submitBtn">Submit</button>

            <h1>Your Input:</h1>
        </form>
    </div>

    <div class="result">
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            $nameErr = $emailErr = $websiteErr = $commentErr = "";

        if (isset($_POST['submitBtn'])) {

            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            }

            if (empty($_POST["website"])) {
                $websiteErr = "Website is required";
            }

            if (empty($_POST["comment"])) {
                $commentErr = "Comment is required";
            }
        }
        ?>
    </div>

    <style>
        .Validation-From{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .form-row{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        label{
            width: 80px;
        }

        #Form-Box{
            border: 2px solid black;
            width: 35%;
            margin: auto;
            padding: 2%;
        }

        .gender-box{
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .gender-box label{
            display: flex;
            align-items: center;
            gap: 5px;
            width: auto;
        }
        .error{
            color: red;
            font-size: 14px;
        }
    </style>
</body>
</html>