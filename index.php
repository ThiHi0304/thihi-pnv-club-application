<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        form {
        width: 650px;
        margin: auto;
        padding: 40px;
        border: 1px solid black;
        border-radius: 5px;
        }  
        .line {
            margin-bottom: 20px;
            display: flex;
        }
        .radio-group{
            display: flex;
            flex-wrap: wrap;
        }
        label {
            margin-bottom: 10px;
        }
        button{
            background-color: yellow;
            height: 35px;
        }
    </style>
</head>
<body>
    <form action="action.php" method="get">
        <div class="row line">
            <label class="col-4" for="name">Name</label>
            <input class="col-8" type="text" name="name">
        </div>
        <div class="row line">
            <label class="col-4" for="club">Club you want to apply</label>
            <select class="col-8" name="club" id="club">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="English Club">English Club</option>
                    <option value="Olympic">Olympic</option>
            </select>
        </div>
        <div class="row line">
            <label class="col-4">Best time for you</label>
            <div class="radio-group col-8">
                <label>
                    <input type="radio" name="time" value="Saturday mornings" checked>Saturday mornings
                </label>
                <label>
                    <input type="radio" name="time" value="Saturday afternoons">Saturday afternoons
                </label>
                <label>
                    <input type="radio" name="time" value="Sunday afternoons">Sunday afternoons
                </label>
            </div>
        </div>
        <div class="row line">
            <label class="col-4">Your skills</label>
            <div class="checkbox-group col-8">
                <div class="row">
                    <div class="col-6">
                        <label>
                        <input  class="bg" type="checkbox" name="skill[]" value="the best coder">The best coder
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="good in arts">Good in arts
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="a super star">A super star
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="a crazy dancer">A crazy dancer
                        </label>
                    </div>
                    <div class="col-6">
                        <label>
                        <input type="checkbox" name="skill[]" value="singer">Singer
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="good in design">Good in design
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="the best eater">The best eater
                        </label>
                        <label>
                            <input type="checkbox" name="skill[]" value="good in speeches">Good in speeches
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <div class="row"><button type="submit">Submit</button></div>
    </form>
    
</body>
</html>