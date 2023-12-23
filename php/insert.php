<?php
$dbhost='127.0.0.1';
$username='root';
$password='';
$dbname="cable_operator";
$conn=mysqli_connect("$dbhost","$username","$password","$dbname");
echo "connected";

/*$sql="CREATE TABLE CUSTOMER_DETAILS
(cust_id int primary key,name varchar(10),address varchar(15),city varchar(10),phone int,email_id varchar(20))";*/

/*$sql="INSERT INTO CUSTOMER_DETAILS(cust_id,name,address,city,phone,email_id) values 
(4,'Rahul','Sriramnagar','Hospet',984545320,'rahul@gmail.com')";*/

/*$sql="CREATE TABLE CONNECTION_DETAILS
(conn_id int,cust_name varchar(10),sb_id varchar(15),conn_date date,duration int,conn_amt int)";*/
/*$sql="INSERT INTO CONNECTION_DETAILS(conn_id,cust_name,sb_id,conn_date,duration,conn_amt) values 
(4,'Rahul','AS123','2020-07-01',123,1000)";*/

/*$sql="INSERT INTO CUSTOMER_DETAILS(cust_id,name,address,city,phone,email_id) values 
(124,'Rahul','Sriramnagar','Hospet',984545320,'rahul@gmail.com')";*/


//$sql="CREATE TABLE LOGS
//(id int,customer_details_cust_id int,action varchar(10),cdate datetime)";

//$sql="CREATE TRIGGER DELETELOG BEFORE DELETE ON CUSTOMER_DETAILS FOR EACH ROW INSERT INTO LOGS values(null,old.cust_id,'deleted',now())";
//$conn=mysqli_query($conn,$sql);
//$sql="CREATE TRIGGER UPDATELOG AFTER UPDATE ON CUSTOMER_DETAILS FOR EACH ROW INSERT INTO LOGS values(null,new.cust_id,'updated',now())";
//$sql="SELECT cust_id,cust_name,duration FROM connection_details where duration=120" ;
$sql="create table pooja(name char(20))";
$conn=mysqli_query($conn,$sql);


?> 

 