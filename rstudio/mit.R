
library(DBI)
#The DBI package defines a common interface between the R and DBMS. 
#The interface defines a small set of classes and methods similar to JDBC of JAVA

library(RMySQL)

args <- commandArgs(trailingOnly=TRUE)

query <- args[1]
query

if(query == 1)
{ 
  
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT branch,year,percentage FROM sies"
  
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  setwd("C:/xampp/htdocs/rstudio")
  
  png(filename="new.png", width=500, height=500)
  
  
  ggplot(data, aes(factor(year), percentage, fill = branch)) + 
    geom_bar(stat="identity", position = "dodge") + 
    scale_fill_brewer(palette = "Set1")
  
  dev.off()
  
  install.packages("ggplot2") 
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
  
}

elseif(query=2)
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}

elseif(query=3)
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}
elseif(query=4)
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}
elseif(query=5)
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}
elseif(query=6)
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}

else
  
{ 
  con <- dbConnect(MySQL(), user="root",dbname="form")
  
  dbExistsTable(con, "sies")
  
  sql_command <- "SELECT year,extc,it,comp,mech,ppt FROM sies"
  
  rs<-dbSendQuery(con,sql_command)
  
  data<- fetch(rs,n=-1)
  
  data
  
  plot(data$year,data$it,type="s",main="it")
}


