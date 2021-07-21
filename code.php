<?php 
 $stufeereis = new Studentregfee;
        $stufeereis->studentindex = $studentindex;
        $stufeereis->feeamount = $request->Seldeptfee;

        $programparts = explode(" ", $request->Seldeptname);
        if (strlen($programparts[0]) >  strlen($programparts[1]))
            $programsetname = $programparts[0];
        else
            $programsetname = $programparts[1];

        $stufeereis->deptname = $programsetname;
        $stufeereis->save();

?>
