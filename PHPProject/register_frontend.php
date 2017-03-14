<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  rel="stylesheet" type="text/css"  href="bootstrap.css"/>
    <title>Register in our brand new sex site</title>
</head>
<body>

<div class="container">
    <?php if (!empty($result)): ?>
        <h1> <?= $result; ?></h1>
    <?php endif; ?>
    <div class="bs-component">
        <form method="post" enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
                <legend>Register</legend>
                <div class="form-group">
                    <label for="firstName" class="col-lg-2 control-label">First name</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="firstName" id="firstName" placeholder="First name" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-lg-2 control-label">Last name</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="lastName" id="lastName" placeholder="Last name" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname" class="col-lg-2 control-label">Nickname</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="nickname" id="nickname" placeholder="Nickname" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="email" id="email" placeholder="Email" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm" class="col-lg-2 control-label">Confirm password</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="confirm" id="confirm" placeholder="Confirm password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Gender</label>
                    <div class="col-lg-10">
                        <?php foreach ($genders as $gender): ?>
                            <div class="radio">
                                <label>
                                    <input name="gender" id="gender" value="<?=$gender['id'];?>" type="radio">
                                    <?= $gender['name']; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-lg-2 control-label">Birthday</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="birthday" id="birthday" placeholder="birthday" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-lg-2 control-label">Country</label>
                    <div class="col-lg-10">
                        <select name="country" class="form-control" id="country">
                            <?php foreach ($countries as $country): ?>
                                <option value="<?=$country['id'];?>">
                                    <?= $country['name']; ?>
                                </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-10">
                        <select name="state" class="form-control" id="state">
                            <?php foreach ($state as $stat): ?>
                                <option value="<?=$stat['id'];?>">
                                    <?= $stat['name']; ?>
                                </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-10">
                        <select name="city" class="form-control" id="city">
                            <?php foreach ($cities as $city): ?>
                                <option value="<?=$city['id'];?>">
                                    <?= $city['name']; ?>
                                </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>

