$(document).ready(function() {
    $("#NewMemForm").submit(function(e) {
        e.preventDefault(); // Prevent form submission
        
        // Personal-Info
        var lname = $("#lname").val();
        var fname = $("#fname").val();
        var mname = $("#mname").val();
        var suffix = $("#suffix").val();
        var nickname = $("#nickname").val();
        var bdate = $("#bdate").val();
        var pob = $("#pob").val();
        var relg = $("#relg").val();
        var citizen = $("#citizenship").val();
        var civil = $("#civil").val();
        var sex = $("#sex").val();
        var street = $("#street").val();
        var city = $("#city").val();
        var brgy = $("#brgy").val();
        var region = $("#region").val();
        var mobile = $("#mobile").val();
        var telephone = $("#telephone").val();
        var emailadd = $("#emailadd").val();
        
        //Additional-Info
        // var  = $("#").val();
        var highest = $("#highest").val();
        var program = $("#program").val();
        var company = $("#company").val();
        var jobpos = $("#jobpos").val();
        var jobsal = $("#jobsal").val();
        var bustype = $("#bustype").val();
        var busmark = $("#busmark").val();
        var bussal = $("#bussal").val();
        var skills = $("#skills").val();
        var hobbies = $("#hobbies").val();
        var social = $("#social").val();
        var restype = $("#restype").val();
        var restats = $("#restats").val();
        var resiyr = $("#resiyr").val();
        var othcoop = $("#othcoop").val();
        // var  = $("#").val();

        //PMES-Info
        var sss = $("#sss").val();
        var tin = $("#tin").val();
        var othID = $("#othID").val();
        var othNo = $("#othNo").val();
        var monthly = $("#monthly").val();
        var trainer = $("#trainer").val();
        var memref = $("#memref").val();
        var pmes = $("#pmes").val();
        var onename = $("#onename").val();
        var onemob = $("#onemob").val();
        var oneadd = $("#oneadd").val();
        var onerel = $("#onerel").val();
        var twoname = $("#twoname").val();
        var twomob = $("#twomob").val();
        var twoadd = $("#twoadd").val();
        var tworel = $("#tworel").val();
        var threename = $("#threename").val();
        var threemob = $("#threemob").val();
        var threeadd = $("#threeadd").val();
        var threerel = $("#threerel").val();
        // var  = $("#").val();
        
        // AJAX request
        $.ajax({
            url: "controller/process-membership.php",
            type: "POST",
            data: {
                lname: lname,
                fname: fname,
                mname: mname,
                suffix: suffix,
                nickname: nickname,
                bdate: bdate,
                pob: pob,
                relg: relg,
                citizen: citizen,
                civil : civil,
                sex : sex,
                street : street,
                city : city,
                brgy : brgy,
                region : region,
                mobile : mobile,
                telephone : telephone,
                emailadd : emailadd,

                highest : highest,
                program : program,
                company : company,
                jobpos : jobpos,
                jobsal : jobsal,
                bustype : bustype,
                busmark : busmark,
                bussal : bussal,
                skills : skills,
                hobbies : hobbies,
                social : social,
                restype : restype,
                restats : restats,
                resiyr : resiyr,
                othcoop : othcoop,

                sss : sss,
                tin : tin,
                othID : othID,
                othNo : othNo,
                monthly : monthly,
                trainer : trainer,
                memref : memref,
                pmes : pmes,
                onename : onename,
                onemob : onemob,
                oneadd : oneadd,
                onerel : onerel,
                twoname : twoname,
                twomob : twomob,
                twoadd : twoadd,
                tworel : tworel,
                threename : threename,
                threemob : threemob,
                threeadd : threeadd,
                threerel : threerel

            },  
            success: function(response) {
              Swal.fire({
                title: 'Success!',
                text: 'Successfully saved data',
                icon: 'success',
                confirmButtonText: 'OK'
              });
            },
            error: function(xhr, status, error) {
              Swal.fire({
                title: 'Error!',
                text: 'Failed to save data: ' + error,
                icon: 'error',
                confirmButtonText: 'OK'
              });
            }
        });
    });
});