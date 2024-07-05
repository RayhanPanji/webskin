function calculateWR() {
    var match = document.getElementById("match").value;
    var wr = document.getElementById("wr").value;
    var target = document.getElementById("target").value;

    if (match === "" || wr === "" || target === "") {
      document.getElementById("result").textContent = "Silahkan isi semua kolom";
      return;
    }

     totalakhir = 0;

     win = Math.round(match * (wr/100));
     lose = match * ((100-wr)/100);
     sisawr = 100 - target;
     wrresult = 100 / sisawr;
     seratuspersen = lose * wrresult;
     total = seratuspersen - match;
     totalakhir = Math.round(total);

    if (totalakhir < 0) {
      document.getElementById("result").textContent = "Anda sudah mencapai WR yang diinginkan!";
    } else {
      document.getElementById("result").textContent = "Anda membutuhkan " + totalakhir + " kemenangan lagi untuk mencapai WR " + target + "%";
    }
  }