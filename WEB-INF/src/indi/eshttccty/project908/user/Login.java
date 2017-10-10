package indi.eshttccty.project908.user;

import java.io.IOException ;

import javax.servlet.* ;
import javax.servlet.http.* ;

public class Login extends HttpServlet 
{
    private static final long serialVersionUID = 1L ;
    @Override
    public void doGet ( HttpServletRequest request , HttpServletResponse response ) throws ServletException , IOException
    {
        request.setAttribute ( "username" , "Stalin" ) ;
        request.getRequestDispatcher ( "/FRONT-END/user/login.jsp" ).forward ( request , response ) ;
        return ;
    }
}
