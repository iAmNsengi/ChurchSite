from django.contrib import admin
from .models import *
# Register your models here.

admin.site.register(SiteSetting)
admin.site.register(Department)
admin.site.register(Activity)
admin.site.register(Program)
admin.site.register(Thoughts)
admin.site.register(Sermon)
admin.site.register(Gallery)
admin.site.register(Contact)
admin.site.register(Partner)
admin.site.register(LiveVideo)
admin.site.register(AccountDetail)





admin.site.site_header = "Churrh Admin"
admin.site.site_title = "Church Admin Portal"
admin.site.index_title = "Welcome to Church Portal"





