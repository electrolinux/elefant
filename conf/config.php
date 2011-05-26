; <?php /* Global configurations go here

[General]

; A master login for the example /admin pages.
master_username = master
master_password = "CHANGE ME"

; Default character set for output.
charset = UTF-8

; Default timezone for date functions.
timezone = GMT

; Default handler for requests to / and /(.*) that don't match
; any other handler.
default_handler = "admin/page"

; Whether to gzip output for browsers that support it.
; This usually gives a noticeable performance boost.
compress_output = On

[I18n]

negotiation_method = url

[Database]

; Database settings go here.
driver = sqlite
file = "conf/site.db"
;driver = mysql
;host = "host:port"
;name = dbname
;user = username
;pass = "password"

[Hooks]

; This is a list of hooks in the system and associated handlers
; to trigger when they occur. It's a good idea to name the hooks
; you define after the handler they occur in, to make it easier
; to look up the parameters they will receive.
admin/add[] = search/add
admin/edit[] = search/add
admin/delete[] = search/delete

; */ ?>