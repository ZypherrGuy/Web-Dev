const { query } = require("express");
var mysql = require("mysql");

var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "rlcstest_db"
});

conn.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
//   conn.query("SELECT * FROM tb_players", function (err, result) {
//     if (err) throw err;
//     console.log(result);
//   });
});

module.exports = conn;