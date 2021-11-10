<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/fdc8bcdb3e.js" crossorigin="anonymous"></script>
        <!--custom CSS-->
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
    <div id="ContactUs">
        <form action="contract.php" method="POST">
            <div class="Header-font">
                <span>Review</span>
            </div>
            <div class="form-shape">
                <label for="query">
                    Type of Issues
                </label>
                <select name="myQuery" id="query">
                    <option value="sel" selected>
                        Select
                    </option>
                    <option value="ord">
                        Order related Issues
                    </option>
                    <option value="Site">
                        Site related Issues
                    </option>
                    <option value="fed">
                        Complaint related Issues
                    </option>
                    <option value="food">
                        Food quality Issues
                    </option>
                    <option value="others">
                        Others
                    </option>
                </select>
            </div>
            <div class="form-shape">
                <label for="name">Name</label>
                <input type="text" name="myName" 
                    id="name" 
                    placeholder="Enter your Name">
            </div>
            <div class="form-shape">
                <label for="Dob">Day of birth</label>
                <input type="text" name="myDob" 
                    id="Dob" 
                    placeholder="Enter your Day of birth">
            </div>
            <div class="form-shape">
                <label for="email">Email</label>
                <input type="email" name="myEmail" 
                    id="email" 
                    placeholder="Enter your email">
            </div>
            <div class="form-shape">
                <label for="phone">Phone Number</label>
                <input type="phone" name="myPhone" 
                    id="phone" 
                    placeholder="Enter your Phone number">
            </div>
            <div id="radio">
                Are you a member of Onlne Food Shop:
                Yes <input type="radio" name="eligible">
                No <input type="radio" name="eligible">
            </div>
            <div class="form-shape">
                <label for="message">
                    Describe your issues
                </label>
                <textarea name="mesg" id="message" 
                    cols="30" rows="10">
                </textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>