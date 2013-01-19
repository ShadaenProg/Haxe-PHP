package;
import php.Lib;
import php.Web;

    class Main {
            
        static function main(){
                new Main();
        }
        public function new()
        {
            var params = Web.getParams();
            var form = new Formulaire();
            var resultat = form.verifier(params);
            Lib.print((resultat!='')?resultat:form.afficher());
        }
            
    }
    
    class Formulaire
    {
        public static inline var __login = 'twist3r';
        public static inline var __pwd = 'password';
        
        public function new()
        {
        
        }
        
        public function afficher()
        {
            var form = '<div id="formulaire">
                            <form method="post" action="index.php"> 
                                <label for="login">Nom d\'utilisateur</label>
                                    <input name="login" id="login" type="text"/> 
                                <label for="pwd">Mot de passe</label> 
                                    <input type="password" name="pwd" id="pwd"/>
                                <input type="submit" value="Envoyer"/>
                            </form>
                        </div>';
            return form;
        }
        
        public function verifier(params:Hash<String>)
        {
            var retour = '';
            if(params.exists('login') && params.exists('pwd'))
            {
                var login = params.get('login');
                var pwd = params.get('pwd');
                
                if(login != '' && pwd != '')
                {
                    if(__login == login && __pwd == pwd)
                    {
                        retour = 'Authentification réussie.';
                    }
                }
            }
            return retour;
        }
        
    }