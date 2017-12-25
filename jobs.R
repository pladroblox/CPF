library(boilerpipeR)
library(RCurl)

library(DBI)
library("DBI", lib.loc="~/R/win-library/3.3")

library("RMySQL", lib.loc="~/R/win-library/3.3")
library(RMySQL)

Sys.getenv("root")

args <- commandArgs(trailingOnly=TRUE)

skill <- args[1]


con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "skill")

sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",skill,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)

df<- fetch(rs,n=-1)
df

all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
 { dbDisconnect(con)
}

if( skill == 1) {
  
url <- "https://www.naukri.com/java-jobs"
content <- getURL(url)
extract <- DefaultExtractor(content)
extract

java='java'
articleextract <- ArticleExtractor(extract)
articleextract

filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
filter

x <- gsub("[^0-9]", "",filter) 
x
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "skill")

sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",java,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)

} else if( skill == 2 ) {
  url <- "https://www.naukri.com/php-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='PHP'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
  
} else if ( skill == 3 ) {
  url <- "https://www.naukri.com/python-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='Python'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
  
} else if ( skill == 4 ) {
  url <- "https://www.naukri.com/javascript-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='javaScript'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
  
} else if ( skill == 5 ) {
  url <- "https://www.naukri.com/c-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='C'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
  
} else if ( skill == 6 ) {
  url <- "https://www.naukri.com/sql-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='SQL'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
} else {
  url <- "https://www.naukri.com/ruby-jobs"
  content <- getURL(url)
  extract <- DefaultExtractor(content)
  extract
  
  set='Ruby'
  articleextract <- ArticleExtractor(extract)
  articleextract
  
  filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
  filter
  x <- gsub("[^0-9]", "",filter) 
  x
  con <- dbConnect(MySQL(), user="root",dbname="form")
  dbExistsTable(con, "skill")
  sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",set,"','",x,"');", sep = "")
  
  #To retrieve data from the database we need to save a results set object.
  rs<-dbSendQuery(con,sql_command)
  #to access the results in R we need to use the fetch function.
  df<- fetch(rs,n=-1)
  df
  all_cons <- dbListConnections(MySQL())
  dbClearResult(rs)
  for(con in all_cons)
    dbDisconnect(con)
}
