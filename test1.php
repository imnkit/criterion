<?php require_once('./app/Mage.php');
umask(0);
Mage::app();
try {
    $user = Mage::getModel('admin/user')
        ->setData(array(
            'username'  => 'tester',
            'firstname' => 'tester',
            'lastname'  => 'test',
            'email'     => 'tester@gmail.com',
            'password'  => 'tester@123321',
            'is_active' => 1
        ))->save();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
//Assign Role Id
try {
    $user->setRoleIds(array(1)) //Administrator role id is 1 ,Here you can assign other roles ids
        ->setRoleUserId($user->getUserId())
        ->saveRelations();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
echo "User created successfully";
