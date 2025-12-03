import mysql from "mysql2"

const connection = mysql.createConnection({
    host : localhost,
    user : root,
    password : "password",
    database: "ihsan_db"
});

connection.connect((err) => {
    if(err) {
        console.error('Error connecting to the database:', err.stack);
    } else {
        console.log('Connected to the database.');
    }
}
);

export default  db;
