 function InsertRecord()
        {
            var fname = document.getElementById('defaultRegisterFormFName').value;
            var lname = document.getElementById('defaultRegisterFormLName').value;
            var email = document.getElementById('defaultRegisterFormEmail').value;
            var phone = document.getElementById('defaultRegisterFormPhone').value;
            if (fname.length != 0 || lname.length !=0 || email.length !=0|| phone.length !=0)
            {
                var connection = new ActiveXObject("ADODB.Connection");
				var connectionstring="Data Source= DESKTOP-PF727U5\SQLEXPRESS ;Initial Catalog= project_test;User ID=root ;Password= password ;Provider=SQLOLEDB";
                connection.Open(connectionstring);
                var rs = new ActiveXObject("ADODB.Recordset");
                rs.Open("insert into Register values('" + fname + "','" + lname + "','" + email + "','" + phone + "')", connection);
                alert("Inserted Record Successfuly");
                
                connection.close();
            }
            else
            {            
                alert("Incomplete details! ");
            }
        }