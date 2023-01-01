/* eslint-disable prettier/prettier */
var express = require("express");
var router = express.Router();
var db = require("../server/server");
// another routes also appear here
// this script to fetch data from MySQL databse table
router.get('/players', function(req, res, next) {
    var sql='SELECT * FROM tb_players';
    db.query(sql, function (err, data, fields) {
    if (err) throw err;
      res.render('players', { title: 'Players', userData: data });
  });
});
module.exports = router;