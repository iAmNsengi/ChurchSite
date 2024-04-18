from django.shortcuts import render,redirect
from django.views import View
from django.contrib.auth.models import User
from django.contrib.auth import login,logout,authenticate
from django.core.mail import send_mail
from django.conf import settings
from django.contrib import messages
from .models import SiteSetting,Department,Activity,Program,Thoughts,Sermon,Gallery,Contact,Partner,LiveVideo,AccountDetail
# Create your views here.
class Home(View):
    def get(self,request):
        siteSettings = SiteSetting.objects.first()
        liveVideo = LiveVideo.objects.first()
        departments = Department.objects.all()
        activities = Activity.objects.all()
        programs = Program.objects.all()
        thoughts = Thoughts.objects.all()
        sermon = Sermon.objects.all().order_by('-updatedAt').first()
        gallery = Gallery.objects.all()
        contact = Contact.objects.all().order_by('-updatedAt').first()
        partners = Partner.objects.all()

        context={
            'settings':siteSettings,
            'liveVideo' : liveVideo,
            'departments':departments,
            'activities': activities,
            'programs': programs,
            'thoughts': thoughts,
            'sermon':sermon,
            'gallery': gallery,
            'contact':contact,
            'partners':partners
        }
        return render(request,'index.html',context)
    
    def post(self,request):
        if request.method == 'POST':
            name = request.POST.get('name')
            email = request.POST.get('email')
            message = request.POST.get('message')

            try:
                send_mail(
                    subject = 'Thanks for Contacting Eglise Mat',
                    message = f'Thank you dear {name} for contacting Us! \n We are going to get back to you soon! \n\n\n Thank You! \n EgliseMat Team \n Best Regards',
                    from_email = settings.EMAIL_HOST_USER,
                    recipient_list = [email,],
                    fail_silently = False,
                    )
                send_mail(
                    subject = 'Message From The Site',
                    message = message,
                    from_email = email,
                    recipient_list = [settings.EMAIL_HOST_USER,],
                    fail_silently = False,
                    )
                messages.success(request,"Thank you for contacting Eglise Mat!")
                return redirect('/')           
            except Exception as e:
                messages.error(request, "A unexpected error occurred, try again!" + e)
                return redirect('/')

def Donate(request):
    accounts = AccountDetail.objects.all().order_by('-updatedAt')

    context ={
        'accounts':accounts
    }
    return render(request,'donate.html', context)

class Dashboard(View):
    def get(self,request):
        return render(request,'dashboard.html')

class Login(View):
    def get(self,request):
        return render(request,'login.html')
    
    def post(self,request):
        if request.method == 'POST':
            username = request.POST['email']
            password = request.POST['password']
            user = authenticate(request, username=username, password=password)
            if user is not None:
                login(request, user)
                return redirect('/dashboard')
            else:
                messages.error(request,'404 ---- User With Given Credentials Was not found!')
                return render(request, 'login.html')

def Logout(request):
    logout(request)
    return redirect('/login')