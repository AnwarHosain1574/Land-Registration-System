function populate(s1,s2){
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);
      s2.innerHTML = "";
      
      if(s1.value == "Patuakhali"){
        var optionArray = ["value|Select Subdistrict","Bauphal|Bauphal","Patuakhali_Sadar|Patuakhali Sadar"];
      } 
      else if(s1.value == "Dhaka"){
        var optionArray = ["value|Select Subdistrict","Dhanmandi|Dhanmandi","Motijheel|Motijheel","Mirpur|Mirpur","Demra|Demra"];
      }  
      else if(s1.value == "Narayanganj"){
        var optionArray = ["value|Select Subdistrict","Rupgong|Rupgong","Sonargaon|Sonargaon","Narayanganj Sadar|Narayanganj Sadar"];
      } 
      for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
      
    }
    
    function populate1(s1,s2){
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);
      s2.innerHTML = "";
      
      if(s1.value == "Bauphal"){
        var optionArray = ["value|Select Mouja","Mohasraddi|Mohasraddi","Jafrabad|Jafrabad",
                          "Konokdia|Konokdia","Sitka|Sitka","Rajapur|Rajapur"];
      } 
      else if(s1.value == "Patuakhali_Sadar"){
        var optionArray = ["value|Select Mouja","Fultola|Fultola","Mativanga|Mativanga",
                            "Keraniganj|Keraniganj","Bodorpur|Bodorpur","Patuakhali|Patuakhali"];
      }
      else if(s1.value == "Narayanganj Sadar"){
        var optionArray = ["value|Select Mouja","Tolla|Tolla","Shitolokkha|Shitolokkha",
                            "Goalbondh|Goalbondh","Paikpara|Paikpara","Char Baktabali|Char Baktabali"];
      }
      else if(s1.value == "Demra"){
        var optionArray = ["value|Select Mouja","Demra|Demra","Sarulia|Sarulia",
                            "Komlapur|Komlapur","Deilla|Deilla","Bamoil|Bamoil"];
      }  
      else if(s1.value == "Motijheel"){
        var optionArray = ["value|Select Mouja","Shantinogor|Shantinogor","Motijheel|Motijheel"];
      } 
      else if(s1.value == "Dhanmandi"){
        var optionArray = ["value|Select Mouja","Dhanmandi|Dhanmandi","Shibpur|Shibpur","Gojmahal|Gojmahal","SheeKhondo|SheeKhondo"];
      }
      else if(s1.value == "Mirpur"){
        var optionArray = ["value|Select Mouja","Mirpur|Mirpur","AnandoNogor|Anando Nogor","Johurabad|Johurabad","Bishil|Bishil"];
      }  
      else if(s1.value == "Sonargaon"){
        var optionArray = ["value|Select Mouja","Doshdona|Doshdona","Tarabo|Tarabo","Kamargaon|Kamargaon"];
      } 
      else if(s1.value == "Rupgong"){
        var optionArray = ["value|Select Mouja","Taora|Taora"];
      } 
      for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
      
    }