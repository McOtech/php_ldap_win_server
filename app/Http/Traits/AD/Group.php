<?php

namespace App\Http\Traits\AD;

use App\Http\Traits\Utils;

trait Group {
    use Utils;

    /**
     * Shows groups
     */
    private function showGroups($connection)
    {
        try {
            $domain = env('LDAP_DOMAIN_NAME');
            $domain = explode(".", $domain);
            $filter = "(objectclass=group)"; // organizationalUnit
            $result = ldap_search($connection, "dc={$domain[0]},dc={$domain[1]}", $filter);
            $entries = ldap_get_entries($connection, $result);
            $groups = [];
            foreach ($entries as $key => $group) {
                if (gettype($key) == 'integer') {
                    array_push($groups, $this->getGroupDetails($group));
                }
            }
            return $groups;
        } catch (\Throwable $th) {
            return $this->alert(env('ERROR_MESSAGE'), $th->getMessage());
        }
    }

    private function getGroupDetails($group)
    {
        try {
            $fillables = [
                'cn', 'description', 'member', 'distinguishedname', 'instancetype', 'whencreated', 'name',
                'samaccountname', 'iscriticalsystemobject', 'dn'
            ];
            $groupObject = [];
            foreach ($group as $key => $value) {
                if (in_array($key, $fillables) && gettype($key) == 'string') {
                    if ($key == 'member') {
                        $members = [];
                        $membersCount = 0;
                        foreach ($value as $index => $value) {
                            if (gettype($value) == 'string') {
                                $membersCount += 1;
                                array_push($members, $value);
                            }
                        }
                        $groupObject[$key] = $membersCount;
                        continue;
                    }
                    $groupObject[$key] = $value[0];
                }
            }
            return $groupObject;
        } catch (\Throwable $th) {
            return $this->alert(env('ERROR_MESSAGE'), $th->getMessage());
        }
    }

    /**
     * Shows groups
     */
    private function showGroupMembers($connection, $id)
    {
        try {
            $domain = env('LDAP_DOMAIN_NAME');
            $domain = explode(".", $domain);
            $filter = "(samaccountname=$id)";
            $result = ldap_search($connection, "dc={$domain[0]},dc={$domain[1]}", $filter);
            $entries = ldap_get_entries($connection, $result);
            return $this->getGroupMembers($entries[0]);
        } catch (\Throwable $th) {
            return $this->alert(env('ERROR_MESSAGE'), $th->getMessage());
        }
    }

    private function getGroupMembers($group)
    {
        try {
            $fillables = [
                'cn', 'description', 'member', 'distinguishedname', 'whencreated', 'name',
                'samaccountname'
            ];
            $groupObject = [];
            foreach ($group as $key => $value) {
                if (in_array($key, $fillables) && gettype($key) == 'string') {
                    if ($key == 'member') {
                        $members = [];
                        foreach ($value as $index => $value) {
                            if (gettype($value) == 'string') {
                                array_push($members, $value);
                            }
                        }
                        $groupObject[$key] = $members;
                        continue;
                    }
                    $groupObject[$key] = $value[0];
                }
            }
            return $groupObject;
        } catch (\Throwable $th) {
            return $this->alert(env('ERROR_MESSAGE'), $th->getMessage());
        }
    }
}