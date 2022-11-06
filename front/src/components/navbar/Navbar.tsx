import { Button, Navbar } from "react-daisyui";
import { useNavigate } from "react-router-dom";

export default function NavbarComponent() {
    const navigate = useNavigate();
    return (
        <>
            <div className="flex w-full component-preview p-4 items-center justify-center gap-2 font-sans">
                <Navbar className='flex justify-between'>
                    <Button className="text-xl normal-case" color="ghost" onClick={() => navigate('/')}>
                        Anim' Assoc
                    </Button>
                    <div className="flex space-x-4">
                        <Button className="text-xl normal-case" color="primary" onClick={() => navigate('/signin')}>
                            S'inscrire
                        </Button>
                        <Button className="text-xl normal-case" color="ghost" onClick={() => navigate('/login')}>
                            Se connecter
                        </Button>
                        <Button className="text-xl normal-case" color="ghost" onClick={() => navigate('/PageAnimaux')}>
                            PageAnimaux
                        </Button>
                        <Button className="text-xl normal-case" color="ghost" onClick={() => navigate('/FicheAnimal')}>
                            FicheAnimal
                        </Button>
                        <Button className="text-xl normal-case" color="ghost" onClick={() => navigate('/Cart')}>
                            Cart
                        </Button>
                    </div>
                </Navbar>
            </div>
        </>
    );
}