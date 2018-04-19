#!/usr/bin/python
import MySQLdb
import sys

connection = MySQLdb.connect (host = "localhost", user = "admin", passwd = "mydb@123, db = "products_mysql")
cursor = connection.cursor ()
cursor.execute ("select name_first, name_last from address")
data = cursor.fetchall ()

for row in data :
print row[0], row[1]

cursor.close ()
connection.close ()
sys.exit()