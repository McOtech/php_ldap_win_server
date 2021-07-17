<?php

namespace App\Http\Traits\AD;

use App\Http\Traits\Utils;

trait OrganizationUnit {
    use Utils;

    /**
     * Shows OUs
     */
    private function showOrganizationUnits($connection)
    {
        try {
            $domain = env('LDAP_DOMAIN_NAME');
            $domain = explode(".", $domain);
            $filter = "(objectclass=organizationalUnit)";
            $result = ldap_search($connection, "dc={$domain[0]},dc={$domain[1]}", $filter);
            $entries = ldap_get_entries($connection, $result);
            $ous = [];
            foreach ($entries as $key => $ou) {
                if (gettype($key) == 'integer') {
                    array_push($ous, $this->getOUDetails($ou));
                }
            }
            return $ous;
        } catch (\Throwable $th) {
            return $this->alert(env('ERROR_MESSAGE'), $th->getMessage());
        }
    }

    private function getOUDetails($ou)
    {
        try {
            $fillables = [
                'cn', 'description', 'member', 'distinguishedname', 'instancetype', 'whencreated', 'name',
                'samaccountname', 'iscriticalsystemobject', 'dn'
            ];
            $groupObject = [];
            foreach ($ou as $key => $value) {
                if (in_array($key, $fillables) && gettype($key) == 'string') {
                    if ($key == 'member') {
                        // $members = [];
                        $membersCount = 0;
                        foreach ($value as $index => $value) {
                            if (gettype($value) == 'string') {
                                $membersCount += 1;
                                // array_push($members, $value);
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
}