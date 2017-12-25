url <- "https://www.naukri.com/php-jobs"
content <- getURL(url)
extract <- DefaultExtractor(content)
extract
set
set='php'
articleextract <- ArticleExtractor(extract)
articleextract

filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
filter
x <- gsub("[^0-9]", "",filter) 
x
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into skill(skill,jobs) VALUES (' ','",set,"','",x,"');", sep = "")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES (' ','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)





url <- "https://www.naukri.com/python-jobs"
content <- getURL(url)
extract <- DefaultExtractor(content)
extract

set='python'
articleextract <- ArticleExtractor(extract)
articleextract

filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
filter
x <- gsub("[^0-9]", "",filter) 
x
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES ('1','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)





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
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES ('2','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)



url <- "https://www.naukri.com/java-jobs"
content <- getURL(url)
extract <- DefaultExtractor(content)
extract

set='java'
articleextract <- ArticleExtractor(extract)
articleextract

filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract )
filter

x <- gsub("[^0-9]", "",filter) 
x
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES ('3','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)






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
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES ('4','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)


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
dbExistsTable(con, "jobs")
sql_command <- paste("INSERT into jobs(id,skill,jobs) VALUES ('5','",set,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)






slices <- c(10)
slices <- c(5)
slices <- c(6)
slices
lbls <- c("US", "UK", "Australia", "Germany", "France")
pie(slices, labels = lbls, main="Pie Chart of Countries")

slices <- append(slices, 10000, after = length(slices))
slices
