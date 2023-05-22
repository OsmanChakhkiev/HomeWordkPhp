<?php








    class Employee {
        public $name;
        public $email;
        public $password;
        public $department;
        public $role;

        public function __construct($name, $email, $password, $department, $role) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->department = $department;
            $this->role = $role;
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getDepartment() {
            return $this->department;
        }

        public function getRole() {
            return $this->role;
        }
    }









    class Department {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }









    class Permission {
        public $name;

        public function __construct($id, $name) {
            $this->name = $name;
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }

    }









    class Role {
        public $name;
        public array $permissions = [];

        public function __construct($name, $permissions) {
            $this->name = $name;
            $this->permissions = $permissions;
        }

        public function getName() {
            return $this->name;
        }

        public function getPermissions() {
            return $this->permissions;
        }

        public function addPermissions(Permission $permission) :void {
            if($permission != null) {
                $this->permissions [] = $permission;
            } else {
                throw new \http\Exception\BadMessageException('Permission must not be void');
            }
        }

        public function removePermission(Permission $permission): bool {
            if ($permission !=null) {
                array_pop($this->permissions);
                return true;
            } else {
                return false;
            }
        }

    }









    class AccessControl {
        public array $roles = [];
        public array $permissions = [];

        public function __construct($roles, $permissions) {
            $this->roles = $roles;
            $this->permissions = $permissions;
        }

        public function checkAccess($employee, $permission): bool  {
            if ($permission != 'admin'|| 'employee' || 'student') {
                return false;
            } else {
                return true;
            }
        }
    }




